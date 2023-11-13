# AeRoom

Last year, I had the incredible opportunity to work on a groundbreaking project, AeRoom, focused on improving air quality in enclosed spaces. Our innovative electronic case, equipped with an advanced ML model, monitors and manages air quality by analyzing data from various sensors and predicting future air conditions. This enables the activation of automated air control devices like fans, air filters, and alarms to maintain optimal air quality.

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
