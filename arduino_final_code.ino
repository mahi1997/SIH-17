
#include <SPI.h>
#include <MFRC522.h>
#include<String.h>

#define SS_PIN 10    
#define RST_PIN 5
MFRC522 mfrc522(SS_PIN, RST_PIN);        // Create MFRC522 instance.

#include <SoftwareSerial.h>
const int RX_PIN = 2;
const int TX_PIN = 3;
const int buzzer = 8; 
String uidst;

SoftwareSerial serial(RX_PIN, TX_PIN);
char commandChar,comtemp;
void setup ()
{
serial.begin (9600);
pinMode(7, OUTPUT); 
SPI.begin();                
mfrc522.PCD_Init();    // initialize RFID scanner
pinMode(buzzer, OUTPUT);      
}
void loop ()
{
if(serial.available())
{
commandChar = serial.read();
if(commandChar == '1') {
  
   tone(buzzer, 1000); // Send 1KHz sound signal...
   delay(250);    // ...for 1 sec
   tone(buzzer, 750); // Send 1KHz sound signal...
   delay(250);    // ...for 1 secv
   tone(buzzer, 1250); // Send 1KHz sound signal...
   delay(250);    // ...for 1 sec
   tone(buzzer, 1000); // Send 1KHz sound signal...
   delay(250);    // ...for 1 sec
   
  noTone(buzzer);}
}

while(!serial.available())  //after command has been received
{
switch(commandChar)
{
case '1':
digitalWrite(7, HIGH);
     
 if ( ! mfrc522.PICC_IsNewCardPresent()) {  // card present or not
      return;  
                  }

 if ( ! mfrc522.PICC_ReadCardSerial())    // if readable or not
      return;

  uidst = "";
        for (byte i = 0; i < mfrc522.uid.size; i++) {
          uidst += String(mfrc522.uid.uidByte[i],HEX);
        } 
  serial.print(uidst+"#");  
  delay(500);
 
  break;

case '0':
digitalWrite(7, LOW);
tone(buzzer, 500); // Send 1KHz sound signal...
delay(1000);   // ...for 1 sec
noTone(buzzer);     // Stop sound...
         
serial.print("#");
commandChar = '3';
break;
 
 }
}

}
