var num = 10;
let name = "NEM";
age = 20;

FRIUT = ["apple", "pineapple", "watermelon", "orange"];
obj = { name: "NATTAKAN", age: 30, tel: "123456789" };

data = { address: ["69", "jira", "Buriram", 31110], name: "NEEM" };

var x = 1;
y = 5;

console.log(FRIUT[3]);
console.log(obj.name);
console.log(data.address[2]);

document.getElementById("smg").innerHTML = FRIUT[1];

let longTxt = data.name + " : " + FRIUT[0];

longTxt = `is ${y} = ${x} My name is ${obj.name}`;

$(function () {
    $("#smg").html(longTxt);
});//jquery ready

$(function () {
    $(".smg1").html(data.address[1]);
});
