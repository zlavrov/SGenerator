import React from 'react';
import { styled } from '@mui/material/styles';
import Paper from '@mui/material/Paper';
import Grid from '@mui/material/Grid';
import Coordinates from './components/Coordinates';
import Address from './components/Address';

const Item = styled(Paper)(({ theme }) => ({
    backgroundColor: '#fff', ...theme.typography.body2, padding: theme.spacing(2), 
    textAlign: 'center', 
    color: (theme.vars ?? theme).palette.text.secondary,
    ...theme.applyStyles('dark', {backgroundColor: '#1A2027'}),
}));

function AddressPage({pathname}) {

    const getContent = (value) => {

        if (value === '/address/coordinates') {

            localStorage.setItem('location', value);
            return <Coordinates name="Coordinates" />;
        }

        if (value === '/address/address') {

            localStorage.setItem('location', value);
            return <Address name="Address" />;
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

export default AddressPage;
