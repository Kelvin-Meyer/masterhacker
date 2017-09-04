<?php

function pick($someArray) {
    return$someArray[rand(0, count($someArray) - 1)];
}
$thing = array(
    "VM",
    "browser cache",
    "shell",
    "terminal",
    "primary SQL",
    "backdoor",
    "code loop",
    "hashed index",
    "AJAX payload",
    "visual GUI",
    "patch cable",
    "burn account",
    "ACK packet",
    "SIN packet",
    "port 80",
    "VPN",
    "VPS",
    "proxy",
    "DNS",
    "GUI",
    "header",
    "ARM processor",
    "legacy boot",
    "kernel",
    "tunnel",
    "MAC adress",
    "mainframe",
    "dark web account",
    "router",
    "visual basic script",
    "OAuth",
    "pin 42",
    "BIOS");


$things = array(
    "proxy's",
    "connections",
    "server capacitators",
    "server transistors",
    "API servers",
    "botnets",
    "cookies",
    "web servers",
    "ISO tables",
    "IPv6 addresses",
    "sockets",
    "protocols",
    "IRC connections",
    "clusters",
    "blocks",
    "33 bit files");

$intro = array("It's hard, but can be achieved by a newbie hacker.",
    "It's not impossible, you've only got to pay attention to these instructions.",
    "If a 5-Year-old can do this, you can certainly do this.",
    "It's not that hard, you can definitely do it.",
    "Easy-peasy",
    "I've just tried it, and it works like a charm!");

$start = array("Let's start by getting hold of the " . pick($thing) . ".",
    "First you'll need a " . pick($thing) . ".",
    "To get started, get the " . pick($thing) . ".",
    "To begin you'll need a "  . pick($thing) . " or something similar.");

$versterkingswoorden = array("secure", "encrypted", "internal", "chain of", "X9", "protected", "private", "public", "external");
$verzwakkingswoorden = array("cracked", "broken", "breached", "open", "exposed", "exploited", "insecure");
$actions = array(
    "reroute",
    "crack",
    "DDOS",
    "run",
    "start",
    "watch",
    "network-sniff",
    "scan",
    "multicast");

$programActions = array(
    "patch",
    "compile",
    "get pushed",
    "update",
    "reboot",
    "reset",
    "root",
    "connect",
    "disconnect",
    "search",
    "scan",
    "mount",
    "eject");



// INSTRUCTION SENTENCE 1
$sentence1 = array(
    "After that you'll " . pick($actions) . " a " . pick($thing) . " to make the " . pick($thing) . " more " . pick($versterkingswoorden) . ".",
    "Then get a couple " . pick($things) . " to make a " . pick($verzwakkingswoorden) . " " . pick($thing) . ".");


$sentence2 = array(
    "Because you want the " . pick($thing) . " to " . pick($programActions) . ".",
    "Instead the " . pick($thing) . " will " . pick($programActions) . " if you don't " . pick($actions) . " it.",
    "So you have " . pick($thing) . " on the  " . pick($thing) . ".");


// SECURITY SENTENCE
$securityMethod = array(
    "VPN",
    "proxy",
    "firewall",
    "windows defender",
    "SSL",
    "ARPA-net request",
    "linux distro");
$danger = array(
    "reverse engineering",
    "port scanning",
    "DNS Lookups",
    "pinging",
    "browser fingerprinting",
    "port forwarding",
    "AD-tracking",
    "evil cookies",
    "third party tracking",
    "visual programming",
    "C++",
    "logging",
    "traceroute",
    "lookup",
    "JQuery",
    ".NET");
$securityReference = array(
    "Don't try this without a good " . pick($securityMethod) . ".",
    "Do not even attempt to do this without a " . pick($securityMethod) . ", otherwise you are open to " . pick($danger) . ".",
    "Before doing this get a hold of a decent " . pick($securityMethod) . ".<br>Because you don't want to get a victim of " . pick($danger) . " or even " . pick($danger) . ".",
    "If you don't want to be vulnerable to " . pick($danger) . " then you should get a AAA-rated " . pick($securityMethod) . ".");


// SOURCE SENTENCE
$source = array("Annoymous", "the NSA", "the FBI", "the Kremlin", "Darpa", "LulzSec", "the hacker known as 4chan", "Redhat", "Whitehat", "Grayhat", "Blackhat", "the Syrian Electronic Army");
$sourceReference = array(
    "This method has been widely used by " . pick($source) . " btw.",
    "But watch out with this technique, " . pick($source) . " is rumored to be its invtentor and does not like misuse of it.",
    "Don't thank me, thank " . pick($source) . " instead.",
    "I got it directly form " . pick($source) . ".",
    "I found this method on " . pick($source) . " forums yesterday.");


$ending = array(
    "That's it, and you're in!",
    "Do that and you're set.",
    "If you do this all you've hacked into it.",
    "That is ithen you are done!",
    "That's all, you've got into the system.");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>//How to Hack</title>
    <style>body {font-family: monospace, "Courier New"; background-color: black; color:greenyellow;}</style>
</head>
<body>
<?php
echo pick($intro) . "<br>";
echo pick($start) . "<br>";
echo pick($sentence1) . "<br>";
echo pick($sentence2) . "<br>";
echo pick($securityReference) . "<br>";
echo pick($ending) . "<br>";
echo pick($sourceReference);
?>
</body>
</html>
