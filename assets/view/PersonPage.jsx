import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import Name from './components/Name';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function PersonPage({pathname}) {

    const getContent = (value) => {

        if (value === '/person/name') {

            localStorage.setItem('location', value);
            return <Name />;
        }
    }

    return (
        <Grid size={8}>
            <Item>
                {getContent(pathname)}
            </Item>
        </Grid>
    );
}

export default PersonPage;
