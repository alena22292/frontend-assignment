// Write a function which accepts 2D array-board representing a sudoku board(9x9).
// The cells of the sudoku board may also contain 0's, which will represent empty cells. Boards containing one or more zeroes are considered to be invalid solutions.


function sudokuValidation(board) {
  let obj = {
    row: {},
    column: {},
    blocks: {},
  }

  let isValid = true;

  loop1:
    for (let r=0; r<board.length; r++){
      loop2:
        for (let c=0; c<board[r].length; c++){
          const cellValue = board[r][c];

          if (cellValue === 0) {
             isValid = false;
             break loop1;
          };
          // validate rows:
          if (!obj.row.hasOwnProperty(r)){
            obj.row[r] = {};
          };
          if (obj.row[r].hasOwnProperty(cellValue)){
            isValid=false;
            break loop1;
          } else {
            obj.row[r][cellValue] = null;
          };
          // validate columns:
          if (!obj.column.hasOwnProperty(c)){
            obj.column[c] = {};
          };
          if (obj.column[c].hasOwnProperty(cellValue)){
            isValid=false;
            break loop1;
          } else {
            obj.column[c][cellValue] = null;
          };
          // valid grid
          const block = getBlockNumber(r,c);
          if(!obj.blocks.hasOwnProperty(block)){
            obj.blocks[b] = {};
          };
          if (obj.blocks[b].hasOwnProperty(cellValue)){
            isValid = false;
            break loop1;
          } else {
            obj.blocks[b][cellValue] = null;
          }
        }
    }
    return isValid;
};

const getBlockNumber = (row, column) => {
    const rowQuotient = parseInt(row / 3, 10);
    const columnQuotient = parseInt(column / 3, 10);

    let blockNumber;

    switch(`${rowQuotient}${columnQuotient}`) {
        case '00': blockNumber = 0; break;
        case '01': blockNumber = 1; break;
        case '02': blockNumber = 2; break;
        case '10': blockNumber = 3; break;
        case '11': blockNumber = 4; break;
        case '12': blockNumber = 5; break;
        case '20': blockNumber = 6; break;
        case '21': blockNumber = 7; break;
        case '22': blockNumber = 8; break;
    };

    return blockNumber;
};









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
