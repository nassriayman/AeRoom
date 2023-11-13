# AeRoom

Last year, we had the incredible opportunity to work on a groundbreaking project, AeRoom, focused on improving air quality in enclosed spaces. Our innovative electronic case, equipped with an advanced ML model, monitors and manages air quality by analyzing data from various sensors and predicting future air conditions. This enables the activation of automated air control devices like fans, air filters, and alarms to maintain optimal air quality.

## Project Overview:

**Title**: AeRoom: Air Quality Control

**Objective**: To develop an electronic case that manages air quality in enclosed spaces using an ML model. The system predicts air quality and activates automated devices like fans, air filters, and alarms to maintain optimal conditions.

**Technologies Used**: Machine Learning, JavaScript, Chart.js, Laravel & PHP, HTML, Bootstrap, Tailwind.

## Prototype Details:

### Software Components:

**Dashboard**: Developed using JavaScript and Chart.js to visualize air quality data from a JSON file.

**Login & Authentication**: Implemented with the Laravel PHP framework for secure user access.

**Design**: Utilized HTML, Bootstrap, and Tailwind for a user-friendly interface.

### Hardware Components: 

**MQTT-based Monitoring**: Using ESP8266 NodeMCU connected to various sensors (temperature, humidity, CO, O3, etc.).

**Data Handling**: Firmware reads sensor data and sends it to MQTT Broker; Node-RED manages the received data.

**Machine Learning**: Regression model in Node-RED to analyze and predict air quality.

**Dashboard Display**: A responsive web application showing data in gauges, text, and charts.

## Business Model:

**Target Customers**: Hospitals, factories, mining sites, residential homes.

**Monetization**: Hardware sales, free installation, and a subscription model for ongoing services.

## Conclusion:

The AeRoom project represents a significant stride in leveraging technology to enhance environmental health and safety. Our team's dedication to this project stemmed from a shared belief in the critical importance of maintaining optimal air quality, especially in enclosed spaces where air pollution can go unnoticed yet have serious health implications.

The successful development and implementation of AeRoom's electronic case, equipped with an array of sensors and powered by a robust machine learning model, demonstrate the potential of smart technology in environmental monitoring. This project not only serves as a testament to the possibilities within the realms of data science and IoT but also underscores our commitment to using technological innovations for societal benefit.

Looking forward, the scalability and adaptability of AeRoom promise a wide range of applications, from residential homes to industrial settings. As we continue to refine our model and expand our understanding of environmental data, we remain focused on our mission to contribute to a healthier, safer living and working environments for all.

## Licence:

**MIT License**

Copyright (c) [2022] [NASSRI AYMAN]

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

