#include <FirebaseESP8266.h>
#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266WiFiMulti.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>
#include <SoftwareSerial.h>


#define FIREBASE_HOST "https://projects-4626f-default-rtdb.asia-southeast1.firebasedatabase.app/"
#define FIREBASE_AUTH "i4bpnqCy3OdjpLGVysv7srvw0OXJqQnSlw0r2F9T"
#define WIFI_SSID "Kwanchaiz"
#define WIFI_PASSWORD "0987654321"
FirebaseData fbdo;


ESP8266WiFiMulti WiFiMulti;


int RunWay3 = 0;               // กำหนดตัวแปร ตรวจจับรถช่องที่ 3
int RunWay4 = 0;               // กำหนดตัวแปร ตรวจจับรถช่องที่ 4

void setup()
{

  pinMode(D0, INPUT);          // sensor ตรวจจับรถช่องที่ 3
  pinMode(D1, INPUT);         // sensor ตรวจจับรถช่องที่ 4
  pinMode(D5, OUTPUT);          // หลอดไฟสีเขียวช่อง 3
  pinMode(D6, OUTPUT);         // หลอดไฟสีเขียวช่อง 4

  Serial.begin(9600);                             //Serial Monior
  for (uint8_t t = 4; t > 0; t--) {               //ทดสอบสเตตัสเน็ต
    Serial.printf("[SETUP] WAIT %d...\n", t);     //อ่านค่า Setup
    Serial.flush();                               //กำลังเชื่อมต่อ
    delay(1000);                                  //เวลา 1 วินาที
  }
  WiFiMulti.addAP("Kwanchaiz", "0987654321");     //รหัสอินเตอร์เน็ต
  randomSeed(50);


  //อ่านค่า FireBase
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("Connecting to Wi-Fi");
  while (WiFi.status() != WL_CONNECTED)
  {
    Serial.print(".");
    delay(300);
  }
  Serial.println();
  Serial.print("Connected with IP: ");
  Serial.println(WiFi.localIP());
  Serial.println();
  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
}

void loop()
{
  RunWay3 = digitalRead(D0);      // อ่านค่ารถช่องที่ 3
  Serial.print("RunWay3 = ");     // พิมพ์ข้อความว่าได้รับ value เท่าไร
  Serial.println(RunWay3);        // พิมพ์ค่าของ value ที่ได้รับ


  if (RunWay3 == 0) {             // ถ้า val เท่ากับ 0 จะทำตามเงื่อนไข
    digitalWrite(D5, LOW);        // ไฟเขียวดับ  เมื่อวัตถุมาไกล้
  } else {
    digitalWrite(D5, HIGH);       // ไฟเขียวติด  เมื่อวัตถุอยู่ไกล
  }

  RunWay4 = digitalRead(D1);      // อ่านค่ารถช่องที่ 4
  Serial.print("RunWay4 = ");     // พิมพ์ข้อความว่าได้รับ value เท่าไร
  Serial.println(RunWay4);        // พิมพ์ค่าของ value ที่ได้รับ

  if (RunWay4 == 0) {             // ถ้า val เท่ากับ 0 จะทำตามเงื่อนไข
    digitalWrite(D6, LOW);        // ไฟเขียวดับ  เมื่อวัตถุมาไกล้
  } else {
    digitalWrite(D6, HIGH);       // ไฟเขียวติด  เมื่อวัตถุอยู่ไกล
  }


  if ((WiFiMulti.run() == WL_CONNECTED)) {
    HTTPClient http;

    String url = "http://192.168.43.9/CarParking/RunWay3.php?RunWay3=" + String(RunWay3);
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

  if ((WiFiMulti.run() == WL_CONNECTED)) {
    HTTPClient http;

    String url1 = "http://192.168.43.9/CarParking/RunWay4.php?RunWay4=" + String(RunWay4);
    Serial.println(url1);
    http.begin(url1); //HTTP

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

  Firebase.setInt(fbdo, "CarPark/RunWay3", RunWay3);
  Firebase.setInt(fbdo, "CarPark/RunWay4", RunWay4);
  delay(3000);
}
