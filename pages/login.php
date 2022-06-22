<?php 
        session_start();
?>




<style>

label {
    font-size:20px;
    margin: 0.5rem;
}

input {
    font-size: 20px;
    border-color:rgba(14, 189, 14, 0.877);
    color: rgba(14, 189, 14, 0.877);
    background-color: #333;
    margin:1rem;
}

textarea {
    font-size: 20px;
    border-color:rgba(14, 189, 14, 0.877);
    color: rgba(14, 189, 14, 0.877);
    background-color: #333;
}

form {
    margin: 1rem;
}



</style>

<div id="contact" class="contain">


<h1> Admin girisi

<form method="post">


<label for="username">Kullanici adi:</label>
<input name="username" type="text" id ="name" placeholder="Kullanici adi">
</input>


<label for="password">Sifre:</label>
<input name="password" id="sifre" type="text" placeholder="Sifre">
</input>
<br>

<input value="Giris yap" type="submit" ></input>


</form>

</div>