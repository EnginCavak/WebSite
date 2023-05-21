
function validateForm() {
    // İsim kontrolü
    var name = document.getElementById('name').value;
    if (name.trim() === '') 
    {
        alert('İsim alanı boş bırakılamaz');
        return false;
    }


    // E-posta kontrolü
    var email = document.getElementById('email').value;
    var emailRegex = /^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})+$/;
    if (email.trim() === '') 
    {
        alert('E-posta alanı boş bırakılamaz');
        return false;
    } 
    else if (!emailRegex.test(email)) 
    {
        alert('Geçerli bir e-posta adresi girin');
        return false;
    }

    
}
function clearForm()
 {
    document.getElementById("MyForm").reset();
}



function checkEmail(input) {
    // Boş olup olmadığını kontrol et
    if (input.trim() === '') 
    {
      return false;
    }
    
    // E-posta formatını kontrol et
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(input);
  }
  

  // Örnek kullanım
  
  var isValidEmail = checkEmail(userInput);
  
  if (isValidEmail) 
  {
    console.log("Girilen metin geçerli bir e-posta adresidir.");
  } 
  else 
  {
    console.log("Girilen metin geçerli bir e-posta adresi değildir veya boş bir metindir.");
  }
  






  