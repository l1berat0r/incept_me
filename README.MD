# Incept Me

Simple CTF.
Created for fun and profit (as a recrutation task - to test some candidates).

9 flags are hidden somewhere. </br>
You can find 3 of them with grep, but it is more fun, when you don't.</br></br>
So don't.</br></br>
Flag format: FLAG[0-9]\{\w{24}\}

Enjoy!

## Installation

docker build -t ctf </br>
docker run -p 1337:80 ctf

OR 

docker pull gatewayantares/ctf:latest </br>
docker run -p 1337:80 gatewayantares/ctf:latest

## How to play

Enter http://127.0.0.1:1337 and hack.
