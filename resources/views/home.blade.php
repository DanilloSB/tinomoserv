<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	     <!-- The core Firebase JS SDK is always required and must be listed first -->
	  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-app.js"></script>
	  <!-- AddFirebase products that you want to use -->
	  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-auth.js"></script>
	  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-firestore.js"></script>

 	  <!-- TODO: Add SDKs for Firebase products that you want to use
       https://firebase.google.com/docs/web/setup#available-libraries -->
	  <script src="https://www.gstatic.com/firebasejs/8.9.1/firebase-analytics.js"></script>
	  
<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBDKu50RKSNpQ-6QzwIsQJ0GEGC-2PsQHY",
    authDomain: "aprendendo-pwa.firebaseapp.com",
    projectId: "aprendendo-pwa",
    storageBucket: "aprendendo-pwa.appspot.com",
    messagingSenderId: "762926012647",
    appId: "1:762926012647:web:00cd0d965a2657e19daa42",
    measurementId: "G-45XQF88WEJ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  var db = firebase.firestore();	

  function salvar(){
  	
	  let usuario = {};
  	
	  let nomeInfo = document.getElementById("nomeprest").value;
       	usuario.nome = nomeInfo;
    
	  let endInfo = document.getElementById("endprest").value;
       	usuario.endereço = endInfo;
	
	  let telInfo = document.getElementById("telprest").value;
       	usuario.contato = telInfo;
    
	  let emailInfo = document.getElementById("emailprest").value;
       	usuario.email = emailInfo;
    
	  let profissaoInfo = document.getElementById("profissaoprest").value;
       	usuario.profissao = profissaoInfo;
         	
	  		           
	     	db.collection("usuarios").add(usuario)
  		.then((docRef) => {
    			console.log("Document written with ID: ", docRef.id);
  		})
  		.catch((error) => {
    			console.error("Error adding document: ", error);
 	 	});

 	 }
</script>
	
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinomo</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>
	
	<style>
        body{
    		font-family:Arial, Helvetica, sans-serif;
    		background-image: linear-gradient(45deg, cyan, yellow);
	}
        input[type=text], select {
        width: 100%;  
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }   
    
        button{
		background-color: dodgerblue;
		border: none;
		padding: 15px;
		width: 100%;
		border-radius: 10px;
		color: white;
		font-size: 15px;
	}
		button:hover{
			background-color: deepskyblue;
			cursor: pointer;
    }
    
        div {
        background-color: rgba(0, 0, 0, 0.9);
			    position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 80px;
			border-radius: 15px;
			color: white;
    }
    </style>
	
<body>
	
   <div>	
    <h2>Cadastro do Prestador</h2>	
  <form>
    <label for="nome">Nome</label>
    <input type="text" id="nomeprest" placeholder="Digite seu Nome Completo" required>
    <label for="endereço">Endereço</label>
    <input type="text" id="endprest" placeholder="Digite seu Endereço" required>
    <label for="telefone">Telefone</label>
    <input type="text" id="telprest" placeholder="Digite seu Contato" required>
    <label for="email">Email</label>
    <input type="text" id="emailprest" placeholder="Digite seu Email">
    <label for="cpf">CPF</label>
    <input type="text" id="cpfprest" placeholder="Digite seu CPF" required>

    <label for="profissao">Profissão</label>
    <br><br>
    <select id="profissaoprest">
      <option value="encanador">Encanador</option>
      <option value="eletrecista">Eletrecista</option>
      <option value="pedreiro">Pedreiro</option>
      <option value="marceneiro(a)">Marceneiro</option>
      <option value="faxineiro">Faxineiro(a)</option>
      <option value="cuidador">Cuidador</option>
      <option value="professor">Professor</option>
      <option value="manicure">Manicure</option>
    </select>
    <br><br>
    <script>
        $(document).ready(function() {
            $('#profissaoprest').select2();
        });
    </script>
      
    <button type="button" onclick="salvar()">Enviar</button>
</div>
</body>
</html>