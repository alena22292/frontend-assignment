// Given an array of integers, where the values should be sorted in the following order: if we have an array

// [1, -1, -3, 9, -2, -5, 4, 8]
// we must rearrange it this way: largest number, smallest number, 2nd largest number, 2nd smallest number, ...

// [9, -5, 8, -3,  4, -2, 1, -1 ]

const meandeering = (array) => {
  let result = [];

  // turn into the descending order:
  const descending = array.sort((a, b) => b - a);

  for (let i = 0; i < descending.length / 2; i++){
    result.push(descending[i]);
    if ( i !== descending.length - 1 - i) {
      result.push(descending[descending.length - 1 - i]);
    }
  }

  return result;
}

console.log(meandeering([1, -1, -3, 9, -2, -5, 4, 8,]))

