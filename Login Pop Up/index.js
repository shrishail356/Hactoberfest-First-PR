
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyB2ZZbqWxnHQAFvktD0k9252qdHiuM96yg",
    authDomain: "studynetics-website.firebaseapp.com",
    projectId: "studynetics-website",
    storageBucket: "studynetics-website.appspot.com",
    messagingSenderId: "380672364525",
    appId: "1:380672364525:web:18296e1abdae78d52861e4",
    measurementId: "G-0TE120X2JJ"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  
    
    const auth = firebase.auth();
    

    
    
    function signIn(){
      
      var email = document.getElementById("email");
      var password = document.getElementById("password");
      
      const promise = auth.signInWithEmailAndPassword(email.value, password.value);
      promise.catch(e => alert(e.message));
      
      
      
      
    }
    
    

    
    
    auth.onAuthStateChanged(function(user){
      
      if(user){
        
        var email = user.email;
        alert("Active User " + email);
        window.location.href = 'got.html';
        //Take user to a different or home page
  
        //is signed in
        
      }else{
        
        alert("No Active User");
        //no user is signed in
      }
      
      
      
    });
    
  
  