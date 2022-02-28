// Burger.js
import React from 'react';
import { StyledBurger } from './Burger.styled';
type BurgerProps = {
  open: boolean,
  setOpen: (open:boolean)=> void

}
const Burger = ({ open, setOpen }:BurgerProps) => {
  return (
    <StyledBurger open={open} onClick={() => setOpen(!open)}>
      <div />
      <div />
      <div />
    </StyledBurger>
  )
}

export default Burger;