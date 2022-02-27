import { InputHTMLAttributes } from 'react'
import './style.css'

interface InputTextProps extends InputHTMLAttributes<HTMLInputElement> {}

export function InputText({
    ...rest
}:InputTextProps){
    return(
        <>
            <div>
                <input className="input-container" {...rest}/>
            </div>
        </>
    )
}