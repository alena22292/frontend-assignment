// I will write a code to check up how lifecycle components are working;
/*
There are a few of them:
  componentWillMount      -  immediately before innitial rendering
  componentDidMount       -  immediatelly after initial rendering
  compontWillReceiveProps -
  shouldComponentUpdate   -
  componentWillUpdate     -
  componentDidUpdate      -
  componentWillUnmount    -
*/

import React, { Component } from 'react';

class React extends Component {
  constructor(props) {
    super(props);

    this.state = {
      status: 0,
    }
  }

  render() {
    return (
      <div>
        {this.state.status}
      </div>
    );
  }
}

export default React;

