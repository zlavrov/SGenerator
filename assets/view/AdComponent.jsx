import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function AdComponent() {

    return (
        <Grid size={2}>
            <Item>size=2</Item>
        </Grid>
    );
}

export default AdComponent;
