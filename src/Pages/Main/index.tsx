import { Job_box } from '../../Components/Job-box'
import Burger from '../../Components/Burger'
import Menu from '../../Components/Menu'
import './style.css'
import { useState } from 'react'

export function Main(){
     const objeto_teste = [{
        title: 'Vaga 1',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        }]
     },{
        title: 'Vaga 2',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        }]
     },{
        title: 'Vaga 3',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 4',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 5',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 6',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 7',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 8',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 9',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     },{
        title: 'Vaga 10',
        categories: [{
            title: 'categoria 1',
            color: '#B0D798'
        },{
            title: 'categoria 2',
            color: '#DC8080'
        },{
            title: 'categoria 3',
            color: '#777BDC'
        }]
     }]
     const [open, setOpen] = useState(false);

    return (
    <>
        <div className='main-container'>
            <div className='body-main-container'>
                <div>
                    <h1 className='title'>Vagas disponiveis</h1>
                </div>

                <div className='job-container'>
                    {objeto_teste.map(item=>(
                        <Job_box title={item.title} categories={item.categories} />
                    ))}
                </div>
            </div>
        </div>
        </>
    )
}

