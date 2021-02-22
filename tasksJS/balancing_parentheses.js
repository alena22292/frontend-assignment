// Given a string that consists of only two types of characters: "(" and ")". We are required to write a function that takes in one such string and balances the parentheses by inserting either a "(" or a ")" as many times as necessary.

// The function should then return the minimum number of insertions made in the string to balance it. For example −

// If the string is −

// const str = '()))';
// Then the output should be 2, because by prepending '((', we can balance the string.

const balancingParentheses = (str) => {
  let result = [];

  for (let i = 0; i < str.length; i++){
    if (str[i] === '(') {
      result.push(str[i]);
    } else if (str[i] === ')') {
       if (result[result.length - 1] === '(') {
        result.pop();
       } else {
        result.push('1');
       }
    }
  }
  return result.length;
}

console.log(balancingParentheses('((((())'));
// output => 3;

