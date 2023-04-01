$(function(){
$("#submitForm").click(function(){
var fname=$("#fname").val();
var title=$("#title").val();
var lname= $("#lname").val();
var country= $("#country").val();
var state= $("#state").val();
var city= $("#city").val();
var pincode= $("#pincode").val();
var mobile= $("#mobile").val();
var email = $("#email").val();
var findus= $("#findus").val();
var community = $("#community").val();
var language= $("#language").val();
var education= $("#education").val();
var experience = $("#experience").val();
var expertise = $("#expertise").val();
var dob = $("#dob").val();
var puja = $("#puja").val();
var address = $("#address").val();
var img = $("#img").val();
var des = $("#des").val();
var referalcode = $("#referalcode").val();
var userid = $("#userid").val();
var password = $("#password").val();
var village = $("#village").val();
var time = $("#time").val();
var pujalocation = $("#pujalocation").val();


var token = $("#csrf").val();
$.ajax({
url:'/submitForm',
type:'POST',
data:{
_token:token,
fname:fname,
mobile:mobile,
title:title,
email:email,
lname:lname,
country:country,
state:state,
city:city,
pincode:pincode,
education:education,
findus:findus,
community:community,
language:language,
experience:experience,
address:address,
des:des,
referalcode:referalcode,
expertise:expertise,
dob:dob,
userid:userid,
password:password,
village:village,
time:time,
otp:otp,
pujalocation:pujalocation,
img:img

},
success:function(result){
var data = JSON.parse(result);
// alert(result);
if(data.statusCode == 200){
$("#formdiv").removeClass('show');
$("#formdiv").addClass('hide');
$("#otpdiv").removeClass('hide'); 
$("#otpdiv").addClass('show'); 
}
else{
alert("something wrong... please try later");
}
}
})
})

$("#otpSubmit").click(function(){
var otp = $("#otp").val();
otp = otp.trim();
var token = $("#csrf").val();
console.log("---",otp);
$.ajax({
type:"POST",
url:'/submitotp',
data:{
_token:token,
otp:otp
},
success:function(otpResult){
otpResult = JSON.parse(otpResult);
if(otpResult.statusCode == 200){
location.replace("/");
}
else{
alert("otp not match. Please try again");
}
}
})
})
})