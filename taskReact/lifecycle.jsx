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
      age: 28,
      status: 0,
    }

    setTimeout(() => {
      this.setState({
        status: 1,
      })
    }, 3000);
    console.log('Constructor');
  }

  componentWillMount(){
    console.log('Component will mount');
  }

  componentDidMount(){
    console.log('Component did mount');
  }

  componentWillReceiveProps(nextProps){
     console.log('Component will receive props', nextProps);
  }

  shouldComponentUpdate(nextProps, nextState){
    console.log('Should component update', nextProps, nextstate);
    return true;
  }

  componentWillUpdate(nextProps, nextState) {
    console.log('Componet will update', nextProps, nextState);
  }

  componentDidUpdate(prevProps, prevState) {
    console.log('Component did update', prevProps, prevState);
  }

  componentWillUnmount(){
    console.log('Component will unmount')
  }

  onMakeOlder(){
    this.setState({
      age: this.state.age + 3,
    });
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

