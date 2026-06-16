import React, { useState } from 'react';
import Grid from '@mui/material/Grid';
import TextField from '@mui/material/TextField';
import api from '../../api/api';
import { Button } from '@mui/material';
import List from '@mui/material/List';
import ListItem from '@mui/material/ListItem';
import ListItemText from '@mui/material/ListItemText';
import Typography from '@mui/material/Typography';

import ContentCopyIcon from '@mui/icons-material/ContentCopy';
import CheckIcon from '@mui/icons-material/Check';
import IconButton from '@mui/material/IconButton';
import Tooltip from '@mui/material/Tooltip';
import { createCopyResponse } from '../../utils';

function Password({ name }) {

    const [data, setData] = useState([]);
    const [count, setCount] = useState(1);

    const handleSend = () => {

        api.get(`/internet/password?count=${count}`).then((result) => {
            setData(result.data);
        });
    };

    const [copied, setCopied] = useState(false);

    const handleCopy = async () => {

        createCopyResponse(data)
        setCopied(true);
        setTimeout(() => setCopied(false), 2000);
    };

    return (
        <Grid container spacing={2}>
            <Grid size={12}>{name}</Grid>
            <Grid size={12}>
                <TextField type="number" fullWidth={true} onChange={event => setCount(Number(event.target.value))} value={count} label="Count" variant="outlined" placeholder="1" />
            </Grid>
            <Grid size={12}>
                <Button fullWidth={true} onClick={handleSend} variant="contained">SGenerate</Button>
            </Grid>
            <Grid size={11}>

                <List dense={true} sx={{width: '100%', bgcolor: 'background.paper'}}>

                    {
                        data.map((item, key) => 
                            <ListItem key={key} divider={true} alignItems="flex-start">
                                <ListItemText 
                                    secondary={
                                        <React.Fragment>
                                            <Typography component="span" variant="body2" sx={{color: 'text.primary', display: 'inline'}}>
                                                {key+=1} {item}
                                            </Typography>
                                        </React.Fragment>
                                    }
                                />
                            </ListItem>
                        )
                    }

                </List>

            </Grid>

            <Grid size={1}>
                {
                    data.length > 0 
                    ? 
                    <Tooltip title={copied ? 'Copied!' : 'Copy to clipboard'} placement="top">
                        <IconButton onClick={(event) => handleCopy()} color={copied ? 'success' : 'default'} aria-label="copy text">
                            {copied ? <CheckIcon /> : <ContentCopyIcon />}
                        </IconButton>
                    </Tooltip>
                    : 
                    null
                }
            </Grid>
        </Grid>
    );
}

export default Password;
