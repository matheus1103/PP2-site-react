import './style.css'
import { InputText } from "../../Components/InputText";
import { SubmitButton } from "../../Components/SubmitButton";

export function Login(){
    function teste(){
        console.log('Clicou!')
    }
    return (

        <div className='login-container'>
            <div className='body-container'>
                <div>
                    <h1 className='title'>Entrar</h1>
                </div>
                <InputText placeholder='Usuário'/>
                <InputText placeholder='Senha'/>
                <SubmitButton label='Entrar' onClick={teste} />

            </div>
        </div>
    )
}

