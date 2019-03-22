import React from 'react';
import { BrowserRouter as Router } from 'react-router-dom';
import { AnimatedRoute } from 'react-router-transition';
import Home from './components/Home';
import Resultats from './components/Resultats';
import history from './history';
import { library } from '@fortawesome/fontawesome-svg-core';
import { faChevronLeft, faChevronRight } from '@fortawesome/free-solid-svg-icons';

library.add(faChevronLeft, faChevronRight);

const App = () => (
  <Router history={history}>
    <AnimatedRoute
      path="/"
      component={Home}
      exact
      atEnter={{ offset: -100 }}
      atLeave={{ offset: -100 }}
      atActive={{ offset: 0 }}
      mapStyles={(styles) => ({
        transform: `translateX(${styles.offset}%)`,
      })}
    />

    <AnimatedRoute
      path="/resultats/:options"
      component={Resultats}
      atEnter={{ offset: -100 }}
      atLeave={{ offset: -100 }}
      atActive={{ offset: 0 }}
      mapStyles={(styles) => ({
        transform: `translateX(${styles.offset}%)`,
      })}
    />
  </Router>
);

export default App;
