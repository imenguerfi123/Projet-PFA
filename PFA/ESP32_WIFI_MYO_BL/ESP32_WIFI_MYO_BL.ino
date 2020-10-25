#define BLYNK_PRINT Serial
#include <WiFi.h>
#include <WiFiClient.h>
#include <BlynkSimpleEsp32.h>

char auth[] = "f26cdd70eb7c429ba1527a8ccfa3c750";
char ssid[] = "Ooredoo-E28A";
char pass[] = "HALG1Q40BH0";

//#define  analogPin 13  // Analog input pin 0 (GPIO 36)
 #define  ADC_pin 36 //AD converter GPIO #34
  //const uint32_t ADC_pin = 34;
int sensorValue = 0;  // Value read from the ADC

BlynkTimer timer;

void setup() {
  Serial.begin(115200); // Initialize serial monitor output at 9600 bps:
  Blynk.begin(auth, ssid, pass);  // Connect to Blynk Cloud
 timer.setInterval(250L, AnalogPinRead);  // Run sensor scan 4 times a second
}

void AnalogPinRead() {
  sensorValue = analogRead(ADC_pin);  // Read the analog in value:
  Serial.print("sensor = ");  // Print the results...
  //float voltage= (sensorValue/1024.0)*3.3*0.25; // 3300 correspond à 3.3v
  float voltage= (sensorValue/4095.0)*900;
  Serial.println(voltage);
  //Serial.println((sensorValue));  // ...to the serial monitor:
  Blynk.virtualWrite(V2, voltage);  // Send the results to Gauge Widget
  //Serial.printf("sensorValue= %d\r\n", sensorValue);
  Blynk.virtualWrite(V1, voltage);
}

void loop() {
  Blynk.run();
timer.run();
}
/*BLYNK_READ(V0){
  //スマホ側 Blynk アプリで設置したレベルメーターに ADC値を送信
  int adc = analogRead(ADC_pin);
  Blynk.virtualWrite(V0, adc);
}*/
