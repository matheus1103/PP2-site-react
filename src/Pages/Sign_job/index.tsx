import './style.css'
import { InputText } from "../../Components/InputText";
import { SubmitButton } from "../../Components/SubmitButton";

export function Sign_job(){
    function teste(){
        console.log('Clicou!')
    }
    return (

        <div className='sign-job-container'>
            <div className='body-container'>
                <div>
                    <h1 className='title'>Cadastro de vaga</h1>
                </div>
                <div className='input-header'>
                    <InputText placeholder='Título'/>
                    <InputText placeholder='Valor'/>
                    <InputText placeholder='Tag'/>
                </div>
                <textarea placeholder='Descrição' rows={5} cols={33} ></textarea>
                <SubmitButton
                label='Enviar'
                onClick={teste}
                style={{
                    marginTop:'20px',
                    width:'20%',
                    height:'30px',
                    fontSize:'18px'
                }}/>
            </div>
        </div>
    )
}

