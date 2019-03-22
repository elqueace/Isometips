import React from 'react';
import PropTypes from 'prop-types';
import { withStyles } from '@material-ui/core/styles';
import InputLabel from '@material-ui/core/InputLabel';
import NativeSelect from '@material-ui/core/NativeSelect';
import InputBase from '@material-ui/core/InputBase';
import TextField from '@material-ui/core/TextField';
import Radio from '@material-ui/core/Radio';
import RadioGroup from '@material-ui/core/RadioGroup';
import FormControlLabel from '@material-ui/core/FormControlLabel';
import FormControl from '@material-ui/core/FormControl';
import FormLabel from '@material-ui/core/FormLabel';

const BootstrapInput = withStyles(theme => ({
  root: {
    'label + &': {
      marginTop: theme.spacing.unit * 3,
    },
  },
  input: {
    borderRadius: 20,
    position: 'relative',
    backgroundColor: theme.palette.background.paper,
    border: '1px solid #ced4da',
    fontSize: 16,
    width: 'auto',
    padding: '10px 26px 10px 12px',
    transition: theme.transitions.create(['border-color', 'box-shadow']),
    textField: {
      marginLeft: theme.spacing.unit,
      marginRight: theme.spacing.unit,
    },
    formControl: {
      margin: theme.spacing.unit * 3,
    },
    group: {
      margin: `${theme.spacing.unit}px 0`,
      border: 0,
    },
      // Use the system font instead of the default Roboto font.
    fontFamily: [
      '-apple-system',
      'BlinkMacSystemFont',
      '"Segoe UI"',
      'Roboto',
      '"Helvetica Neue"',
      'Arial',
      'sans-serif',
      '"Apple Color Emoji"',
      '"Segoe UI Emoji"',
      '"Segoe UI Symbol"',
    ].join(','),
    '&:focus': {
      borderRadius: 4,
      borderColor: '#80bdff',
      boxShadow: '0 0 0 0.2rem rgba(0,123,255,.25)',
    },
  },
}))(InputBase);

const styles = theme => ({
  root: {
    display: 'flex',
    flexWrap: 'wrap',
  },
  margin: {
    margin: theme.spacing.unit,
  },
  bootstrapFormLabel: {
    fontSize: 18,
  },
});

class CustomizedSelects extends React.Component {
  state = {
    date: '',
    theme: '',
    popularity: 0
  };

  handleChange = () => {
    this.props.afterChange(this.state);
  }

  handleDateChange = event => {
    this.setState({ date: event.target.value }, () => this.handleChange());
  }

  handleThemeChange = event => {
    this.setState({ theme: event.target.value }, () => this.handleChange());
  };

  handlePopularityChange = event => {
    this.setState({ popularity: event.target.value }, () => this.handleChange());
  }

  render() {
    const { classes } = this.props;

    return (
      <aside className={classes.root} autoComplete="off">
        
        <FormControl className={classes.margin}>
          
        </FormControl>

        <FormControl className={classes.margin}>

         <TextField
            id="date"
            type="date"
            defaultValue="2019-03-21"
            className={classes.textField}
            onChange={this.handleDateChange}
            InputLabelProps={{
              shrink: true,
            }}
          />

          <InputLabel htmlFor="customized-native-simple" className={classes.bootstrapFormLabel}>

          </InputLabel>

          <NativeSelect
            onChange={this.handleThemeChange}
            input={<BootstrapInput name="theme" id="customized-native-simple" />}
          >
            <option value={null}>Théme</option>
            <option value="t">Science/Tech</option>
            <option value="s">Sport</option>
            <option value="n">National</option>
          </NativeSelect>

          <div id="combobox"className={classes.root}>
            <FormLabel id="labelcombo" component="legend">Popularité</FormLabel>
            <RadioGroup
              aria-label="Popularité"
              name="Popularité"
              className={classes.group}
              value={this.state.value}
              onChange={this.handlePopularityChange}
              id="radiogroup"
            >
              <FormControlLabel value="10000" control={<Radio />} label="Les plus populaires" />
              <FormControlLabel value="1" control={<Radio />} label="je suis un peu indécis" />
              <FormControlLabel value="20000" control={<Radio />} label="Je veux la perle rare" />

            </RadioGroup>
          </div>

        </FormControl>
      </aside>
    );
  }
}

CustomizedSelects.propTypes = {
  classes: PropTypes.object.isRequired,
};

export default withStyles(styles)(CustomizedSelects);
