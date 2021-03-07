let value;

const now = new Date();

const date1 = new Date("03-16-2000 23:10:15");

const date2 = new Date("March 16 2000");

const date3 = new Date("03/16/2000");

value = now;

value = date1;

value = date1.getDay(); // 0dan başlıyor günler mon-tue-wed-thu-fri....
value = date1.getDate(); // 1 den başlıyor ayın günü - NORMAL
value = date1.getMonth(); // 0 dan başlıyor ay 
value = date1.getFullYear(); // Yıl normal devam ediyor

value = date1.getHours(); 
value = date1.getMinutes(); 
value = date1.getSeconds();
value = date1.getMilliseconds();

date1.setDate(17);
date1.setMonth(6); // 7.ay
date1.setFullYear(1970);
date1.setHours(6);
date1.setMinutes(21);
date1.setSeconds(33);
date1.setMilliseconds(44);

value = date1;

console.log(date3);
console.log(date2);
console.log(value);
