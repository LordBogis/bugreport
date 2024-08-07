<!DOCTYPE html>
<html lang="en">
    <head>
        <title>bugreport:loginpage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

<div class="header">
  <img id="logo" src="Assets/Zugbug.PNG" alt="Logo" onclick ="location.href='index.php'"/>
  <h1>Cosmara Bug Reporter</h1>
</div>

      <div class="main">
        <form action="process_form.php" method= "POST">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="first_name" placeholder="Your name..">

              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="last_name" placeholder="Your last name..">
              
              <label for="email">Email Address</label>
              <input type="text" id="email" name="email" placeholder="Your Email Address">
              
              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                <input type="submit" value="Submit">
          </form>

      </div>
<div class="footer">
  <a href="index.php">Back</a>
</div>

    </body>


</html>

<style> 

/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 80%; 
  padding: 1rem; /* Some padding */  
  border: 0.2rem solid #2c2c2c; 
  border-radius: 0.5rem; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin: 1rem;
  font-size: 0.8rem;
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Changes the placeholder text to be Black! */
input[type=text]::placeholder, textarea::placeholder {
  color: black;
}

/* Changes the label text to be white! */
label {
  color: black;
  padding: 0.5rem 0;
  font-size: 1.5rem;
}

form {
  background-image: linear-gradient(#BDBDBD, #FFFFFF);
  display: flex;
  flex-direction: column;
  align-items: center; 
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #FFD600;
  color: black;
  padding: 0.5rem 4rem;
  border: none;
  border-radius: 0.1rem;
  cursor: pointer;
}
/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}
/* Add a background color and some padding around the form */
.container {
  border-radius: 0.5rem;
  background-color: #2c2c2c;
  padding: 1rem;
}

/* Added Responsiveness for small screen size */
@media (max-width: 768px) {
  input[type=text], select, textarea {
    width: 100%;
    margin: 1.5rem 0;
    font-size: 1.5rem;
  }
}
/* Added Resposiveness to the text padding */
@media (max-width: 768px) {
  label {
    padding: 1rem, 0;
    font-size: 2.2rem;
  }
}

</style>
