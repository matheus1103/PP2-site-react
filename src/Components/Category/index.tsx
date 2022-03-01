import './style.css'

type CategoryProps = {
    text: string,
    color:string
}

export function Category({color, text, ...rest}:CategoryProps){
    return(
        <div {...rest} style={{background:color}} className='category' >{text}</div>
    )
}