<div id="func" class="contain">
    <h1>Functional Paradigm </h1>
<p>
Although functional languages are pretty new in computer science,
th concept functional paradigm was found even earlier than Alan Turing's
imperative computer model. The underlying model of functional programming
is the <a href="#lambdaCal"><u>Lambda Calculus</u></a>.
</p>

<hr>

<h2 href="#lambdaCal"> Lambda Calculus</h2>

<p>
Haskell Curry was a Mathematician, Logician and (after invention) computer scientist. <br>
Terms are as following:
\[x : Variable, \; \; \lambda x.y : x \longrightarrow y, \lambda x.A : x \longrightarrow A, (A B) \]
For any M and N two lambda terms. <br>
The notation can be confusing for A and B but they are basically very simple.
A and B are any combination <br> of other Terms.
\(x : Variable, \; \; \lambda x.y : x \longrightarrow y, \lambda x.M : x \)
<div style="margin: 2rem;"></div>
<p> After consideration of a few minutes you may notice that these terms analogiousl represent following grammer.
\[G := (x, \; \; x \longrightarrow xy, \; \; x \longrightarrow xA, \; \; M \longrightarrow N.) \]
You can see that every permutation of atomic terms x,y,z ... are obviously
in the span of the Formal language.
Which means that every algorithms from a Turing Machine can 
be represented by Lambda Terms.<br>
<h2>Functional Programming</h2>
However, you might notice that these functions are purely mathematical
terms as 3 + 5 or \(3^2\). But how can we accomplish an I/O action like printing something in terminal or 
running a printer? <br>
<h2>I/O actions</h2>
<p>
    I/O actions in a declerative language (not only functional but in a logical language like Prolog)
    are not explicitly done in contrast to an imperative language like Java, Python, C/++ etc.
    Instead we implicitly define extra terms which are Syntactical just
    like any other pure functional term but have side effects which controls computer
    resources manuplating main Memory (RAM). <br>
    Now an example: <br>
    Let (1,2,3,... and x, y, z \(\lambda x.y\)) = z be terms of a Lambda Calculus
    and x, y, z are no numbers. And in the compiler side we have we define x, y, z as special syntactical
    Tokens without showing any aspect of this. And we implement the I/O side effect something 
    like \(\lambda x.y\) = (print x) z. <br>
    Namely print x is just a side effect and function result is z.
    And z is also a special Syntax. But what we can not define a function like \(\lambda x.y\) = 1 or any other functional value.
</p>
<h2>Higher Ordered Functions</h2>
Functions and values are equivalent in a functional language. It doesn't matter if 
it is a term \(\lambda x\)   or x or \(\lambda x\). These are all values and all functions (x is a constant function ( \(() \longrightarrow x\))  

</p>

</p>
</div>