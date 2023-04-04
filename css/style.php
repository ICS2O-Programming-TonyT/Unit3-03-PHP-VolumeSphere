<?php
header("Content-type: text/css; charset: UTF-8");

echo '@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");

body {
  margin: 0;
  padding: 0;
  background-color: #f2f2f2;
  font-family: Roboto, sans-serif;
}

.container {
  max-width: 500px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

h1 {
  color: hsl(220, 60%, 50%);
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
}

input {
  display: block;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

button[type=\"submit\"] {
  display: block;
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: none;
  background-color: #3f51b5;
  color: #fff;
  cursor: pointer;
  text-align: center;
}

button[type=\"submit\"]:hover {
  background-color: #2c3e50;
}

#result {
  margin-top: 20px;
  color: #555;
}';
?>
