import { Category } from '../../Components/Category'
import { SubmitButton } from '../../Components/SubmitButton'
import './style.css'

export function Job(){
     const objeto_teste = {
        title: 'Vaga 1',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        }]
     }
    function teste(){
        console.log('Clicou!')
    }
    return (
        <div className='job-container'>
            <div className='job-header'>
                <div className='title-categories-container'>
                    <div className="imagem-provisoria" />
                    <div style={{marginLeft:'20px'}}>
                        <h2>{objeto_teste.title}</h2>
                        <div className='categories-container'>
                            {objeto_teste.categories.map(item=>(
                                <Category color={item.color} text={item.title}/>
                            ))}
                        </div>
                    </div>
                </div>
                <SubmitButton style={{
                    background:'#D1F3A5',
                    marginTop:'20px',
                    width:'20%',
                    height:'30px'
                }}  label='Candidatar' onClick={teste} />
            </div>
            <div className='description-container'>
                <p className='text-description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vehicula neque vitae ligula varius, a volutpat eros faucibus. Maecenas ut nisl vel eros egestas pellentesque et ac turpis. Aenean sed magna sed est semper porttitor. Suspendisse pulvinar felis vitae consequat faucibus. Donec gravida blandit sagittis. Curabitur venenatis quis velit et commodo. Aenean maximus elit nec augue tincidunt viverra. Nam id vestibulum odio. Nunc fermentum risus eget sem efficitur scelerisque. Nunc leo tellus, hendrerit quis augue et, elementum pretium libero. Aenean vel eros mattis, cursus sapien sed, suscipit quam. Integer lacinia, mauris vitae sagittis ultrices, sapien tortor rhoncus massa, et aliquam ligula nisi id ante. Donec nec gravida leo.</p>
            </div>
        </div>
    )
}

