import React from 'react';
import SvgImage from './SvgImage';
import Select from './Select';
import { Link } from 'react-router-dom';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import history from '../history';
import Chat from './Chat';
import MessengerCustomerChat from 'react-messenger-customer-chat';


export default class Content extends React.Component {

  state = {
    searchQuery: '',
    theme: '',
    date: '',
    popularity: 1
  };

  handleChange = event => {
    this.setState({
      [event.target.name]: event.target.value
    });
  }

  onSelectChange = selectState => {
    this.setState({
      date: selectState.date,
      theme: selectState.theme,
      popularity: selectState.popularity
    });
  }

  componentDidMount = () => {
    // SVG Events
    const svgElements = document.getElementsByTagName('g');
    Array.prototype.forEach.call(svgElements, (element) => {
      const polygons = element.getElementsByTagName('polygon');

      element.addEventListener('mouseenter', () => {
        Array.prototype.forEach.call(polygons, (polygon) => {
          polygon.classList.add('activated');
        });
      });

      element.addEventListener('click', (ev) => {
        const lieu = ev.target.parentNode.parentNode.id;
        let theme;

        if(lieu === 'Tour_eifel' || lieu === 'Arc' || lieu === 'Tour' || lieu === 'Voiture') {
          theme = 'e';
        } else if(lieu === 'PetitBatiment' || lieu === 'GrandBatiment_1_' || lieu === 'GrandBatiment' || lieu === 'GrandBatiment_2_' || lieu === 'GrandBatiment_3_') {
          theme = 'b';
        } else if(lieu === 'Arbre_2_' || lieu === 'Arbre_3_' || lieu === 'Arbre_4_') {
          theme = 'm';
        }

        this.setState({
          searchQuery: 'Paris',
          date: '20190321',
          theme: theme,
          popularity: 1
        }, () => {
          history.push(`/resultats/query=${this.state.searchQuery}&date=${this.state.date}&theme=${this.state.theme}&popularity=${this.state.popularity}`);
          history.go();
        });
      });

      element.addEventListener('mouseleave', () => {
        Array.prototype.forEach.call(polygons, (polygon) => {
          polygon.classList.remove('activated');
        });
      });
    });
  }

  render() {
    return (
      <div id="Content">
        <header>
          <img src="http://localhost:3000/assets/isometrips.png" alt="Logo" className="logo"/>

          <div className="search">
            <input
              type="text"
              name="searchQuery"
              value={this.state.searchQuery}
              onChange={this.handleChange}
            />

            <Link id="go"
              to={
                `/resultats/query=${this.state.searchQuery}&date=${this.state.date}&theme=${this.state.theme}&popularity=${this.state.popularity}`
              }>
              Go
            </Link>
          </div>
        </header>

        <Select afterChange={this.onSelectChange} />
        
        <section>
        <p id="text">
          Survolez la ville
        </p>
          <SvgImage 
            id="svg1"
          />
        </section>

        <section>
          <div className="btn left">
            <FontAwesomeIcon icon="chevron-left"/>
          </div>

          <div className="location">
            <span><h2>PARIS</h2></span>
            <span><h4>FRANCE</h4></span>
          </div>

          <div className="btn right">
            <FontAwesomeIcon icon="chevron-right"/>
          </div>

          <div>
    
  </div>

        </section>
        <Link id="go"
              to={
                `/chatbot`
              }>
              BOT
            </Link>
        
          <MessengerCustomerChat
      pageId="EAAgMYVUnyKcBANs4rvS3eiKOHEFUVfjz7xTaDEjdmhwejn6NeCUxHrXogcNnW7aMyvjpWat4gc9UX1iXO0veF1kcg3NScZCMMJ3iz9PZCHK4zy3e0wncKNtQ3cZBZAeA2MdnA1vuUZCjK3m7Icaz71ZBR0ZAZCszJNA4WQL9nl4wDAZDZD"
      appId="2265411993716903"
    />

        
      </div>

    );
  }
}
