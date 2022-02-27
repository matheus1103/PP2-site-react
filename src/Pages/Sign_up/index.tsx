import './style.css'
import { InputText } from "../../Components/InputText";
import { SubmitButton } from "../../Components/SubmitButton";

export function Sign_up(){
    function teste(){
        console.log('Clicou!')
    }
    return (

        <div className='sign-up-container'>
            <div className='body-container'>
                <div>
                    <h1 className='title'>Registrar</h1>
                </div>
                <InputText placeholder='Usuário'/>
                <InputText placeholder='Senha'/>
                <InputText placeholder='Email'/>
                <div className='checkbox-holder'>
                    <div className='check1'>
                        <input type='checkbox' />
                        <label>Pessoal</label>
                    </div>
                    <div className='check2'>
                        <input type='checkbox' />
                        <label>Empresa</label>
                    </div>
                </div>
                <SubmitButton label='Enviar' onClick={teste} />

            </div>
        </div>
    )
}

