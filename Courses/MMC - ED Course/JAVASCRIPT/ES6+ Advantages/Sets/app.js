// Sets - Kümeler - Her Değerden Bir Tane Tutabilir.

const mySet = new Set();

mySet.add(100);
mySet.add(100);
mySet.add(100);
mySet.add(2.78);
mySet.add("Mustafa");
mySet.add(true);
mySet.add([1,2,3]);
mySet.add({a:1,b:2,c:3});

const mySet2 = new Set([3.14,873,"Mustafa"]);

// console.log(mySet);
// console.log(mySet2);

// // Size

// console.log(mySet.size);

// // Delete

// mySet.delete(100);

// console.log(mySet);

// // Has Methoyu

// console.log(mySet.has("Mustafa"));
// console.log(mySet.has(100));
// console.log(mySet.has(2.78));

// For Each

mySet.forEach(function(value)
{
    console.log(value);
})

// For Of

for (let value of mySet)
{
    console.log(value);
}

const array = Array.from(mySet);

console.log(array);