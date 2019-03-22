import React from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import ArticleCard from './ArticleCard';

export default class Resultats extends React.Component {

  state = {
    url: 'https://api.ozae.com/gnw/articles?key=94daa13fac6d48e4b094420f96456d59&edition=fr-fr&hard_limit=20',
    articles: []
  };

  componentDidMount = () => {
    const optionsSplit = this.props.match.params.options.split('&');
    const query = optionsSplit[0].split('=')[1];
    const date = optionsSplit[1].split('=')[1];
    const theme = optionsSplit[2].split('=')[1];
    const popularity = optionsSplit[3].split('=')[1];

    let options = '';
    if(query !== undefined && query !== '') {
      options += `&query=${query}`;
    }
    if(date !== undefined && date !== '') {
      const dateSplit = date.split('-');
      const finalDate = dateSplit[0] + dateSplit[1] + dateSplit[2];
      options += `&date=${finalDate}__${finalDate}`;
    }
    if(theme !== undefined && theme !== '') {
      options += `&topic=${theme}`;
    }
    if(popularity !== undefined && popularity != 0) {
      options = `&hours=6&options[newsonfire]=${popularity}&order[col]=social_score&order[srt]=DESC`;
    }

    axios.get(this.state.url + options)
    .then((data) => {
      this.setState({ articles: data.data.articles });
    })
    .catch((err) => {});
  }

  render() {
    return (
      <div id="Resultats">
        <Link to="/">Retour</Link>
        <h1>Résultats</h1>

        <div id="articles" style={{
          display: 'inline-flex',
          flexWrap: 'wrap',
          justifyContent: 'center',
          alignItems: 'center'
        }}>
          {
            this.state.articles.map((article) => {
              return (
                <ArticleCard
                  key={article.id}
                  img={article.img_uri}
                  title={article.name}
                  article_link={article.url}
                />
              );
            })
          }
        </div>
      </div>
    );
  }
}
