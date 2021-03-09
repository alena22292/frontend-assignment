// Write a function which accepts 2D array-board representing a sudoku board(9x9).
// The cells of the sudoku board may also contain 0's, which will represent empty cells. Boards containing one or more zeroes are considered to be invalid solutions.


function sudokuValidation(board) {
  let obj = {
    row: {},
    column: {},
    blocks: {},
  }

  let isValid = false;

  loop1:
    for (let r=0; r<board.length; r++){
      loop2:
        for (let c=0; c<board[r].length; c++){

        }

    }
}








//  Example:

// => validSolution([
//   [5, 3, 4, 6, 7, 8, 9, 1, 2],
//   [6, 7, 2, 1, 9, 5, 3, 4, 8],
//   [1, 9, 8, 3, 4, 2, 5, 6, 7],
//   [8, 5, 9, 7, 6, 1, 4, 2, 3],
//   [4, 2, 6, 8, 5, 3, 7, 9, 1],
//   [7, 1, 3, 9, 2, 4, 8, 5, 6],
//   [9, 6, 1, 5, 3, 7, 2, 8, 4],
//   [2, 8, 7, 4, 1, 9, 6, 3, 5],
//   [3, 4, 5, 2, 8, 6, 1, 7, 9]
// ]);
// => true
