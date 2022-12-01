import React, { Component } from 'react';
import SearchBar from './SearchBar';
// import ImageList from './ImageList';
import youtubeApi from './api/youtubeApi';

class App extends Component {
  state = { videos: [] };

  onSearchSubmit = async (term) => {
    const response = await youtubeApi

    this.setState({ videos: response.})
  }
  render() {
    return (
      <div className="ui container">
        <SearchBar onSubmit={this.onSearchSubmit} />
      </div>
    )
  }
};
export default App;