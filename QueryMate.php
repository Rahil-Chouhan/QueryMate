<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins");

    #idContainer {
      width: 1400px;
      display: flex;
      flex-direction: column;
      margin: 0 auto;
      padding: 30px;
      background-color: #000000;
      color: #fff;
      backdrop-filter: blur(30px);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      border: 2px solid #1b1141;
      border-radius: 16px;
    }

    #idContainer::before {
      content: '';
      display: flexbox;
      position: absolute;
      margin-top: -650px;
      margin-left: 600px;
      width: 100px;
      height: 280%;
      background: linear-gradient(#00ccff, #d400d4);
      animation: animate 4s linear infinite;
      z-index: -10;
    }

    @keyframes animate {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }
    
    #idContainer::after {
      content: '';
      position: absolute;
      background: #1b1141;
      inset: 4px;
      border-radius: 16px;
      z-index: -10;
    }


    textarea {
      border: none;
      resize: none;
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      line-height: 1.5;
      padding: 10px;
      border-radius: 10px;
      z-index: 10;
    }

    #txtOutput {
      margin-bottom: 20px;
    }

    #txtMsg {
      margin-bottom: 20px;
    }

    #iblspeak {
      padding-right: -20px;
    }

    button {
      border: none;
      cursor: pointer;
      background-color: #0099ff;
      padding-right: 30px;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      line-height: 1.5;
      transition: background-color 0.2s ease;
    }

    button:hover {
      outline:2px solid #0062cc;
      outline-offset:3px;
    }

    label {
      padding-left: 20px;
      padding-right: 20px;
      z-index: 10;
    }

    select {
      padding: 10px;
      border-radius: 5px;
      color: #fff;
      background: #0077cc;
      backdrop-filter: blur(50px);
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      line-height: 1.5;
      margin-right: 0px;
    }

    /* Result styles */
    #idText {
      padding: 10px;
      border-radius: 5px;
      background-color: transparent;
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      line-height: 1.5;
      min-height: 200px;
      overflow-y: auto;
    }

    textarea {
      background-color: #7acfd6;
      border-color: #fff;
      border: 3px solid white;
      color: #000;
      font-size: 20px;
      z-index: 10;
    }

    h1 {
      margin-top: 20px;
      margin-bottom: 20px;
      margin-left: auto;
      margin-right: auto;
      font-size: 3em;
    }

  </style>

</head>

<body>
 

  <div id="idContainer">
    <h1>QueryMate</h1>
    <textarea id="txtMsg" rows="5" wrap="soft" style="width: 98%; 
         margin-left: 4px; margin-top: 8px" placeholder="Input Text"></textarea>
    <textarea id="txtOutput" rows="10" style="margin-top: 10px; width: 100%;" placeholder="Output"></textarea>

    <div>
      <button type="button" onclick="Send()" id="btnSend">Send</button>
      <label id="lblSpeak"><input id="chkSpeak" type="checkbox" onclick="SpeechToText()" />Listen</label>
      <label id="lblMute"><input id="chkMute" type="checkbox" onclick="Mute(this.checked)" />Mute</label>

      <select id="selModel">
        <option value="text-davinci-003">text-davinci-003</option>
        <option value="text-davinci-002">text-davinci-002</option>
        <option value="code-davinci-002">code-davinci-002</option>
      </select>

      <select id="selLang" onchange="ChangeLang(this)">
        <option value="en-US">English (United States)</option>
        <option value="fr-FR">French (France)</option>
        <option value="ru-RU">Russian (Russia)</option>
        <option value="pt-BR">Portuguese (Brazil)</option>
        <option value="es-ES">Spanish (Spain)</option>
        <option value="de-DE">German (Germany)</option>
        <option value="it-IT">Italian (Italy)</option>
        <option value="pl-PL">Polish (Poland)</option>
        <option value="nl-NL">Dutch (Netherlands)</option>
      </select>

    </div>




  </div>

  <script src="Backend.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>


</html>