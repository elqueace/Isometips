import React from 'react';
import { ThemeProvider } from 'styled-components';
import ChatBot from 'react-simple-chatbot';

// all available props
const theme = {
  background: '#f5f8fb',
  fontFamily: 'Helvetica Neue, Helvetica, sans-serif',
  headerBgColor: '#50A7F9',
  headerFontColor: '#fff',
  headerFontSize: '15px',
  botBubbleColor: '#50A7F9',
  botFontColor: '#fff',
  userBubbleColor: '#fff',
  userFontColor: '#4a4a4a',
};

const steps = [
  {
    id: '1',
    message: 'salut! Je suis Iso le robot, si tu as une question ou si tu as juste envie de tuer le temps, je suis là !',
    trigger: '2',
  },
  {
    id: '2',
    message: 'What is your name?',
    trigger: '3',
  },
  {
    id: '3',
    user: true,
    trigger: '4',
  },
  {
    id: '4',
    message: '{previousValue}, ravi de te connaitre, je propose de voir mon menu',
    trigger: '5',
  },
  {
    id: '5',
    options: [
      { value: 1, label: 'A quoi sers-tu ?', trigger: '6' },
      { value: 2, label: 'Que me proposes-tu ?', trigger: '7' },
      { value: 3, label: 'Bip boup bap bip !', trigger: '8' },
    ],
  },
  {
    id: '6',
    message: 'Pour le moment je peux te remontrer mon menu',
    trigger: '5',
  },
  {
    id: '7',
    message: 'Je te propose de voir mon menu de démo',
    trigger: '5',
  },
  {
    id: '8',
    message: 'Awesome! You are a telepath!',
    end: true,
  },
];

const ThemedExample = () => (
  <ThemeProvider theme={theme}>
    <ChatBot steps={steps} />
  </ThemeProvider>
);
  
export default ThemedExample;
  