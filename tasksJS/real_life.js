// 1) Array of numbers needs to find the smallest interval btw numbers
// examles:
// [1, 5, 3, 8]
function smallestInterval(array){
  let result = [];
  let myArray = array.sort((a,b) => a-b);
  for (let i=0; i < array.length; i++){
     result.push(Math.abs(myArray[i] - myArray[i + 1]))
  }
  return result.sort((a,b) => a-b)[0];
}

// 2) Task to filter the parcel by weight(150), length(150), height(150) = (1000000) and mass
// return: either Standart, Rejected, Special
//
// (used a condition &&)

// 3) Find the approximation of pi/4. Given array of points[[3, 6],[2, 4]]

// 4) Given an object. Need to retrieve an array of strings 'Hello-obj[key'
function sayHello(object) {
  let result = [];
  let objArray = Object.entries(object);
  for (let ar of objArray) {
     result.push('Hello-'+ ar[0]);
  }
  return result;
}
// 5) Sum of values:
// Function gives a number(n), need to retrieve all numbers which match the condition:
// it should be either % 3, 5, 7 => sum up all of them use reduce.

