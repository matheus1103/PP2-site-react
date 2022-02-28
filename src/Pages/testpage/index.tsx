import React, { useState } from 'react';
import { ThemeProvider } from 'styled-components';
import { GlobalStyles } from '../../global';
import theme from '../../global/styles/theme';
import  Burger from '../../Components/Burger';
import  Menu from '../../Components/Menu';




function TestPage() {
    const [open, setOpen] = useState(false);
    return (
      <ThemeProvider theme={theme}>
        <>
          <GlobalStyles />
          <div>
            <h1>Hello. This is burger menu tutorial</h1>
            <img src="https://media.giphy.com/media/xTiTnwj1LUAw0RAfiU/giphy.gif" alt="animated burger" />
          </div>
          <div>
            <Burger open={open} setOpen={setOpen} />
            <Menu open={open} setOpen={setOpen} />
          </div>
        </>
      </ThemeProvider>
    );
  }
export default TestPage;