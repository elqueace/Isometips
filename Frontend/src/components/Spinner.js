import React from 'react';
import GifLoader from 'react-gif-loader';

export default class Spinner extends React.Component {
  render() {
    return (
      <GifLoader
        loading={true}
        imageSrc="http://localhost:3000/assets/animation.gif"
        imageStyle={{
          width: '100vw',
          height: '100vh'
        }}
        overlayBackground="rgba(255,255,255,0.5)"
      />
    );
  }
}
