// Menu.js
import React from 'react';
import { StyledMenu } from './Menu.styled';
type MenuProps = {
  open: boolean,
  setOpen: (open:boolean)=> void
}
const Menu = ({ open }:MenuProps) => {
  return (
    <StyledMenu open={open}>
      {!window.location.pathname.includes('text') && (
        <a href="/profile">
          <span role="img" aria-label="Perfil">&#128100;</span>
          Perfil
        </a>
      )}
      <a href="/sign_up">
        <span role="img" aria-label="vagas">&#128395;</span>
        Registrar
      </a>
      <a href="/login">
        <span role="img" aria-label="vagas">&#128640;</span>
        Entrar
      </a>
      <a href="/">
        <span role="img" aria-label="vagas">&#x1f4b8;</span>
        Vagas
        </a>
      <a href="/contact">
        <span role="img" aria-label="contact">&#x1f4e9;</span>
        Contato
      </a>
      <a href="/sign_job">
        <span role="img" aria-label="criar-vaga">&#128229;</span>
        Cadastrar Vaga
      </a>
    </StyledMenu>
  )
}

export default Menu;