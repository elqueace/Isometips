import React from 'react';
import Content from './Content';
import Chat from './Chat';
import Spinner from './Spinner';

export default class Home extends React.Component {

  state = {
    loading: true
  };

  componentDidMount = () => {
    setTimeout(() => {
      this.setState({ loading: false });
    }, 5800);
  }

  render() {
    return (
      <React.Fragment>
        { this.state.loading && <Spinner /> }

        <Content />
      </React.Fragment>
    );
  }
}
