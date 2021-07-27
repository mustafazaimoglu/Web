const obj1 = {
    number1:10,
    number2:20
};

const obj2 = {
    number1:30,
    number2:50
};

function addNumbers(number3)
{
    console.log(this.number1 + this.number2 + number3);
}

// addNumbers(100); // NaN = Not a Number

// CALL (.call(object,x,y,z,....));

// addNumbers.call(obj1,100);
// addNumbers.call(obj2,100);

// APPLY (.apply(object,[x,y,z,...]));

// addNumbers.apply(obj1,[100]);
// addNumbers.apply(obj2,[100]);

function getTotalValue(number3,number4)
{
    return this.number1 + this.number2 + number3 + number4;
}

// Bind (type(const,let,var) x = function.bind(object);

const newFunc1 = getTotalValue.bind(obj1);
const newFunc2 = getTotalValue.bind(obj2);

console.log(newFunc1(100,150));
console.log(newFunc2(100,150));