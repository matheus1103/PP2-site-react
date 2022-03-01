import './App.css'
import { AppRoutes } from "./Routes"
import theme from './global/styles/theme';
import { ThemeProvider } from 'styled-components';
import Burger from './Components/Burger';
import Menu from './Components/Menu';
import { useState } from 'react';

const arrayPages = []

function App() {
  const [open, setOpen] = useState(false);

  return(
    <ThemeProvider theme={theme}>
      <AppRoutes />
    </ThemeProvider>
  )
}

export default App
