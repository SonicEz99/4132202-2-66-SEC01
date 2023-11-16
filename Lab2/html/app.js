var num = 10;
let name = "NEM";
age = 20;

FRIUT = ["apple", "pineapple", "watermelon", "orange"];
obj = { name: "NATTAKAN", age: 30, tel: "123456789" };

data = { address: ["69", "jira", "Buriram", 31110], name: "NEEM" };

console.log(FRIUT[1]);
console.log(obj.name);
console.log(data.address[2]);

document.getElementById("smg").innerHTML = FRIUT[1];

let longTxt = data.name + " : " + FRIUT[0];

longTxt = `${data.name} :
                ${data.address[2]}`;
$(function () {
    $("#smg").html(longTxt);
});//jquery ready
