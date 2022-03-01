// Menu.js
import React from 'react';
import { Link } from 'react-router-dom';
import { StyledMenu } from './Menu.styled';
type MenuProps = {
  open: boolean,
  setOpen: (open:boolean)=> void
}
const Menu = ({ open }:MenuProps) => {
  return (
    <StyledMenu open={open}>
      {!window.location.pathname.includes('text') && (
        <Link to="/profile">
          <span role="img" aria-label="Perfil">&#128100;</span>
          Perfil
        </Link>
      )}
      <Link to="/sign_up">
        <span role="img" aria-label="vagas">&#128395;</span>
        Registrar
      </Link>
      <Link to="/login">
        <span role="img" aria-label="vagas">&#128640;</span>
        Entrar
      </Link>
      <Link to="/">
        <span role="img" aria-label="vagas">&#x1f4b8;</span>
        Vagas
        </Link>
      <Link to="/contact">
        <span role="img" aria-label="contact">&#x1f4e9;</span>
        Contato
      </Link>
      <Link to="/sign_job">
        <span role="img" aria-label="criar-vaga">&#128229;</span>
        Cadastrar Vaga
      </Link>
    </StyledMenu>
  )
}

export default Menu;