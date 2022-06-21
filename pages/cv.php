<style>


.skill {
    width: 50%;
    padding:0.3rem;
    margin: 0.5rem 0.3rem;
    font-size:20px;
    color: white;
    border-color: rgba(14, 189, 14, 0.877);
    position: relative;
    background-color: rgba(14, 189, 14, 0.164);
}



.topnav {
  width: fit-content;
  height: 100%;
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid rgba(14, 189, 14, 0.877);
}

.topnav a.active {
  border-bottom: 3px solid rgba(14, 189, 14, 0.877);
}

#cv {
    flex-direction: column;
}

.cv {
    position:absolute;  
    left: 50%;
}

progress {
  background-color: #FFFAFA;
}

</style>
<div class="topnav">
<a id="cvlink" download="cv" href="../cv.pdf"> Download </a>
</div>



<!--------------   Left div     ------------------>
<div id="cv">

<div class="skill">
<label for="cv"> Haskell:</label>
<progress class="cv" value="70" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> ProLog:</label>
<progress class="cv" value="60" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Git & GitHub:</label>
<progress class="cv" value="50" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> LaTeX:</label>
<progress class="cv" value="80" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Information Retrieval:</label>
<progress class="cv" value="60" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Python:</label>
<progress class="cv" value="60" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> NLP:</label>
<progress class="cv" value="90" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Algebra:</label>
<progress class="cv" value="60" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Machine Learning:</label>
<progress class="cv" value="60" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Linear Algebra:</label>
<progress class="cv" value="80" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Analysis:</label>
<progress class="cv" value="70" max="100"></progress>
</div>


<!-- ------------   Right div   ------------------->


<div class="skill">
<label for="cv"> Cryptography:</label>
<progress class="cv" value="75" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> English:</label>
<progress class="cv" value="100" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> German:</label>
<progress class="cv" value="100" max="100"></progress>
</div>

<div class="skill">
<label for="cv"> Turkish:</label>
<progress class="cv" value="100" max="100"></progress>
</div>

</div>

