#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>

ESP8266WiFiMulti WiFiMulti;

int In = 0;                  // ตัวแปรจำนวนรถขาเข้า
int Out = 0;                 // ตัวแปรจำนวนรถขาออก
int Car = 0;                 // ตัวแปรนับจำนวนรถ

void setup()
{
  pinMode(D0 , INPUT);            // Ir ขาเข้า
  pinMode(D1 , INPUT);            // Ir ขาออก

  Serial.begin(9600);                             //Serial Monior
  for (uint8_t t = 4; t > 0; t--) {               //ทดสอบสเตตัสเน็ต
    Serial.printf("[SETUP] WAIT %d...\n", t);     //อ่านค่า Setup
    Serial.flush();                               //กำลังเชื่อมต่อ
    delay(1000);                                  //เวลา 1 วินาที
  }
  WiFiMulti.addAP("Kwanchaiz", "0987654321");     //รหัสอินเตอร์เน็ต
  randomSeed(50);
}



void loop()
{
  int In = digitalRead(D0);       // รับค่าขาเข้า
  int Out = digitalRead(D1);      // รับค่าขาออก

  if (In == 0 && Car < 4) {       // เงื่อนไขรถเข้า
    Car = Car + 1;
    delay(500);
  }
  if (Out == 0 && Car > 0) {      // เงื่อนไขรถออก
    Car = Car - 1;
    delay(500);
  }

  if ((WiFiMulti.run() == WL_CONNECTED)) {
    HTTPClient http;
    
    Serial.print("Car ");
    Serial.print(Car);
    Serial.print(" in the Parking");
    Serial.println();

    String url = "http://192.168.43.9/CarParking/addCarIn.php?Parking=" + String(Car); //URl ตัวสำคัญในการ ยิง Path Sql
    Serial.println(url);
    http.begin(url); //HTTP

    int httpCode = http.GET();
    if (httpCode > 0) {
      Serial.printf("[HTTP] GET... code: %d\n", httpCode);
      if (httpCode == HTTP_CODE_OK) {
        String payload = http.getString();
        Serial.println(payload);
      }
    } else {
      Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
    }
    http.end();
  }
  delay(1000);
}
