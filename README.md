# PHP Exporter

A simple PHP project to export data in different formats (Text, JSON, and CSV) using classes and namespaces.

---

## Features

- Receive data from an HTML form  
- Support for Text, JSON, and CSV formats  
- Generate output files in the `files` folder  
- Built with OOP and namespaces in PHP

---

## Project Structure

- `index.php` - User input form  
- `process.php` - Request processing and selecting the appropriate Exporter  
- `Exporter/` - Folder containing Exporter classes (`JsonExporter`, `TextExporter`, `CsvExporter`)  
- `Exporter/files` - Folder where output files are saved  
- `loader.php` - Autoloader script for classes

---

## Installation & Usage

1. Clone or download the project:

   ```bash
   git clone https://github.com/AmirRiahi2008/exporter.git
